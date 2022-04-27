<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/resources/batch_job.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Resources;

class BatchJob
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
4google/ads/googleads/v9/enums/batch_job_status.protogoogle.ads.googleads.v9.enums"h
BatchJobStatusEnum"R
BatchJobStatus
UNSPECIFIED 
UNKNOWN
PENDING
RUNNING
DONEB�
!com.google.ads.googleads.v9.enumsBBatchJobStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�

1google/ads/googleads/v9/resources/batch_job.proto!google.ads.googleads.v9.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
BatchJob@
resource_name (	B)�A�A#
!googleads.googleapis.com/BatchJob
id (B�AH �)
next_add_sequence_token (	B�AH�S
metadata (2<.google.ads.googleads.v9.resources.BatchJob.BatchJobMetadataB�AU
status (2@.google.ads.googleads.v9.enums.BatchJobStatusEnum.BatchJobStatusB�A(
long_running_operation	 (	B�AH��
BatchJobMetadata$
creation_date_time (	B�AH �!
start_date_time (	B�AH�&
completion_date_time	 (	B�AH�,
estimated_completion_ratio
 (B�AH�!
operation_count (B�AH�*
executed_operation_count (B�AH�B
_creation_date_timeB
_start_date_timeB
_completion_date_timeB
_estimated_completion_ratioB
_operation_countB
_executed_operation_count:X�AU
!googleads.googleapis.com/BatchJob0customers/{customer_id}/batchJobs/{batch_job_id}B
_idB
_next_add_sequence_tokenB
_long_running_operationB�
%com.google.ads.googleads.v9.resourcesBBatchJobProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v9/resources;resources�GAA�!Google.Ads.GoogleAds.V9.Resources�!Google\\Ads\\GoogleAds\\V9\\Resources�%Google::Ads::GoogleAds::V9::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

